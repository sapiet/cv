<?php

namespace App\Command;

use App\Controller\MainController;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Routing\RouterInterface;

#[AsCommand(
    name: 'app:build',
    description: 'Build and store a view from the MainController',
)]
class BuildCommand extends Command
{
    /**
     * @var RouterInterface
     */
    private $router;

    /**
     * @var MainController
     */
    private $mainController;

    /**
     * @var string
     */
    private $projectDirectory;

    /**
     * @var string
     */
    private $appEnv;

    /**
     * @var string
     */
    private $websiteHost;

    /**
     * @var string
     */
    private $websiteScheme;

    public function __construct(
        RouterInterface $router,
        MainController $mainController,
        string $projectDirectory,
        string $appEnv,
        string $websiteHost,
        string $websiteScheme
    ) {
        parent::__construct();

        $this->mainController = $mainController;
        $this->projectDirectory = $projectDirectory;
        $this->router = $router;
        $this->appEnv = $appEnv;
        $this->websiteHost = $websiteHost;
        $this->websiteScheme = $websiteScheme;
    }

    protected function configure(): void
    {
        $this
            ->addArgument('method', InputArgument::REQUIRED, 'Controller method to call')
            ->addArgument('file', InputArgument::REQUIRED, 'Destination filename')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        if ('prod' === $this->appEnv) {
            $context = $this->router->getContext();
            $context->setHost($this->websiteHost);
            $context->setScheme($this->websiteScheme);
        }

        $method = $input->getArgument('method');
        $file = $input->getArgument('file');

        $io->note(sprintf('Generating "%s" page ...', $file));

        $response = $this->mainController->$method();

        file_put_contents(
            implode('/', [
                $this->projectDirectory,
                'build',
                $file
            ]),
            is_string($response) ? $response : $response->getContent()
        );

        $io->success('Done.');

        return Command::SUCCESS;
    }
}
