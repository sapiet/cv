<?php

namespace App\Command;

use App\Controller\MainController;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class BuildCommand extends Command
{
    protected static $defaultName = 'build';

    /**
     * @var MainController
     */
    private $mainController;

    /**
     * @var string
     */
    private $projectDirectory;

    public function __construct(
        MainController $mainController,
        string $projectDirectory
    ) {
        parent::__construct();

        $this->mainController = $mainController;
        $this->projectDirectory = $projectDirectory;
    }

    protected function configure()
    {
        $this
            ->setDescription('Build the cv html version')
            ->addArgument('method', InputArgument::REQUIRED, 'Controller method to call')
            ->addArgument('file', InputArgument::REQUIRED, 'Destination filename')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

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
    }
}
