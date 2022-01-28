<?php

namespace App\Services;

use Spipu\Html2Pdf\Html2Pdf;
use Twig\Environment;

class CvCreator
{
    /**
     * @var ProfileProvider
     */
    private $profileProvider;

    /**
     * @var Environment
     */
    private $twig;

    public function __construct(
        Environment $twig,
        ProfileProvider $profileProvider
    ) {
        $this->twig = $twig;
        $this->profileProvider = $profileProvider;
    }

    /**
     * @return Html2Pdf
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function create(): Html2Pdf
    {
        $profile = $this->profileProvider->get();

        $version = 2;
        $optimize = true;

        $view = $this->twig->render(
            sprintf('curriculum-vitae-v%d.html.twig', $version),
            compact('profile')
        );

        $pagesCount = 0;

        do {
            $pagesCount++;
            $currentHeight = 297 * $pagesCount;
            $html2pdf = new Html2Pdf('P', [210, $currentHeight]);
            $html2pdf->writeHTML($view);
        } while (1 < $html2pdf->getNbPages());

        if ($optimize) {
            do {
                $lastHtml2pdf = $html2pdf;
                $currentHeight -= 2;
                $html2pdf = new Html2Pdf('P', [210, $currentHeight]);
                $html2pdf->writeHTML($view);
                $continue = 1 === $html2pdf->getNbPages();

                if ($continue) {
                    $lastHtml2pdf = $html2pdf;
                }
            } while ($continue);

            $html2pdf = $lastHtml2pdf;
        }

        return $html2pdf;
    }
}
