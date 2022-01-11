<?php

// GingTeam
// ⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠟⠋⠉⠉⠛⠻⢿⣿⠿⠛⠋⠁⠈⠙
// ⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠁⠴⣿⠟⠉⠀⠀⠈⡀⠀⠀⠀⠀⠀⠀
// ⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠋⠀⣾⣿⣿⣿⣿⣿⠿⠿⠿⠛⠛⠉⠉⠀⠀⠀⠀⠀⠀⠀⠉⢁⠀⠀⠈⠀⠀⠀⠀⢀⡇⠀⠀⠀⠀⠀⠀
// ⣿⣿⣿⣿⣿⣿⣿⣿⣿⡏⠀⠀⣀⣿⠿⠛⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⡀⠀⠀⠀⢀⣠⣾⣿⠀⠀⠐⢦⡀⠀
// ⣿⣿⣿⣿⣿⣿⣿⣿⣿⡀⣠⡾⠋⠁⠀⠀⠀⠀⠀⠀⠀⠀⣤⣤⣄⣀⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠛⠻⠿⠿⠟⠛⠋⢷⣄⠀⠀⠹⣦
// ⣿⣿⣿⣿⣿⣿⣿⣿⣿⠟⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡟⠛⠛⠛⠛⠯⠶⣤⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠻⣷⣤⡀⠘
// ⣿⣿⣿⣿⣿⣿⣿⡿⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡇⠀⠀⠀⠀⠀⠀⠀⠉⠑⠢⣀⠈⠢⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⣿⣿⣷
// ⣿⣿⣿⣿⣿⣿⠏⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢰⠀⠀⡇⠀⠀⠀⣀⠄⠒⠀⠀⠀⠀⠀⠑⠢⡙⡳⣄⠀⠀⠀⠈⠀⠀⠀⠀⠈⠻⣿
// ⣿⣿⣿⣿⡿⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡆⠀⠃⢀⡴⠚⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠱⠈⠳⡄⠀⠀⠀⢂⠀⠀⠀⠀⠘
// ⣿⣿⣿⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⣾⡀⢐⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣀⣴⡀⠁⠀⠙⢦⠀⠀⠈⣧⡀⠀⠀⠀
// ⣿⣿⣿⠃⠀⠀⠀⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡏⠳⡈⡀⠀⠀⠀⠀⠀⢀⣤⣶⣿⡿⠿⠽⠿⠿⣿⣷⣶⣌⡳⡀⠀⢹⣷⡄⠀⠀
// ⣿⡟⠁⠀⠀⠀⠀⣷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⠀⠑⢥⠀⠀⡾⠋⣰⡿⡟⠊⠀⠚⣿⣿⣿⣶⣄⠀⠉⢹⠀⢳⠀⢸⣿⣿⡄⠀
// ⣿⠇⠀⠀⠀⠀⠀⢹⣇⠀⠀⠀⠂⠀⠀⠀⠀⠀⠀⠀⠘⡄⠀⠈⠀⠈⠀⠰⢻⠋⠀⣀⣀⣠⣿⣿⣿⣿⣿⣇⠀⠈⠀⠀⢃⢘⡏⢿⣿⡄
// ⡿⠀⠀⠀⠀⠀⠀⣿⠈⠣⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢃⠀⠀⠀⠀⠀⠀⠋⠀⠀⢿⣿⣿⣿⣿⣿⡿⠟⠁⠀⠀⠀⠀⠘⣼⡇⠈⢿⣿
// ⡇⠀⠀⠀⠀⡆⠀⣿⠀⠀⡨⠂⠄⡀⠀⠀⠀⠠⣀⠀⠀⠘⡄⠀⠀⠀⠀⠀⠀⠀⠀⠈⠙⠻⠿⠛⠁⠀⠀⠀⠀⠀⠀⠀⠀⣿⠀⠀⠈⣿
// ⡇⠀⠀⠀⠀⠀⠀⢸⠀⣐⠊⠀⠀⠀⢉⠶⠶⢂⠈⠙⠒⠂⠠⠄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠇⠀⠀⠀⠸
// ⠀⣀⠂⢣⡀⠀⠀⠘⣠⠃⠀⠀⠀⠀⣠⣴⣾⠷⠤⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⡀⡙⠀⠈⢧⠀⠡⡀⢉⠀⠀⠀⠀⣴⣿⡫⣋⣥⣤⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⡗⠃⠐⠀⠈⣷⡀⢳⡄⠂⠀⠀⣸⣿⡛⠑⠛⢿⣿⣿⣷⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⡇⡀⠂⡀⠀⣸⢱⡈⠇⠐⠄⡠⣿⡟⠁⠀⠀⣸⣿⣿⣿⡟⠀⠀⠀⠀⠈⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⣿⡐⡀⠀⢠⠏⠀⢳⡘⡄⠈⠀⢿⡿⠀⢻⣿⣿⣿⡿⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⣿⣧⠐⢀⡏⠀⠀⠀⢳⡴⡀⠀⢸⣿⡄⠀⠉⠛⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣶⣶⣶⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⣿⣿⣆⠀⠐⡀⠀⠀⠀⢻⣷⡀⠀⠃⠙⠂⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢿⣿⣿⣿⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⣿⣿⣿⣆⠀⠙⣄⠀⠀⠀⠱⣕⠄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠻⣿⣿⣿⣦⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣴
// ⣿⣿⣿⣿⣧⡀⠘⢦⡀⠀⠀⠈⢢⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⠿⣿⣿⣇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣾⣿
// ⣿⣿⣿⣿⣿⣷⢄⠈⠻⣆⠀⠀⠀⠑⢄⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠛⠿⠀⠀⠀⠀⠀⠀⠀⠀⢀⣴⣾⣿⣿⣿

declare(strict_types=1);

use FrameworkX\FilesystemHandler;
use Psr\Http\Message\ServerRequestInterface;
use React\EventLoop\Loop;
use React\Filesystem\Filesystem;
use React\Http\Message\Response;
use Workerman\Events\React\StreamSelectLoop;
use Workerman\Worker;

define('APP_ROOT', __DIR__.'/public');

require_once __DIR__.'/vendor/autoload.php';

$app = new FrameworkX\App();

$app->get('/', new FilesystemHandler(APP_ROOT.'/index.html'));

$app->get('/assets/{path:.*}', new FilesystemHandler(APP_ROOT));

$app->post('/post', function (ServerRequestInterface $request) {
    /** @var string|false */
    $image = $request->getParsedBody()['image'] ?? false;

    if (false !== $image) {
        $filesystem = Filesystem::create(Loop::get());

        $name = sprintf('%s/attachment/%s.jpeg', APP_ROOT, uniqid());
        $filesystem->file($name)->putContents(
            base64_decode(
                substr($image, strpos($image, ',') + 1)
            )
        );
    }

    return new Response(200, [], 'OK');
});

Worker::$globalEvent = new StreamSelectLoop();
Loop::set(Worker::$globalEvent);

$worker = new Worker();
$worker->name = 'FrameworkX Runtime';

$worker->onWorkerStart = function () use ($app) {
    $app->run();
};

Worker::runAll();
