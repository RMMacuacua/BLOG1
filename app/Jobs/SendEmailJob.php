<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\SendMail;
use Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $details;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
        
    }
    
   
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {


        $email = new SendMail($this->details);
        Mail::to("robertmassiquelmacuacua@gmail.com")->send($email);
        
    }
}/*
EErrorException: Undefined variable: details in C:\xampp\htdocs\blog\app\Jobs\SendEmailJob.php:38
Stack trace:
#0 C:\xampp\htdocs\blog\app\Jobs\SendEmailJob.php(38): Illuminate\Foundation\Bootstrap\HandleExceptions->handleError(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 38, Array)
#1 [internal function]: App\Jobs\SendEmailJob->handle()
#2 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Container\BoundMethod.php(33): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Container\Util.php(36): Illuminate\Container\BoundMethod::Illuminate\Container\{closure}()
#4 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Container\BoundMethod.php(91): Illuminate\Container\Util::unwrapIfClosure(Object(Closure))
#5 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Container\BoundMethod.php(35): Illuminate\Container\BoundMethod::callBoundMethod(Object(Illuminate\Foundation\Application), Array, Object(Closure))
#6 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Container\Container.php(592): Illuminate\Container\BoundMethod::call(Object(Illuminate\Foundation\Application), Array, Array, NULL)
#7 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Bus\Dispatcher.php(94): Illuminate\Container\Container->call(Array)
#8 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(128): Illuminate\Bus\Dispatcher->Illuminate\Bus\{closure}(Object(App\Jobs\SendEmailJob))
#9 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(103): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}(Object(App\Jobs\SendEmailJob))
#10 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Bus\Dispatcher.php(98): Illuminate\Pipeline\Pipeline->then(Object(Closure))
#11 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Queue\CallQueuedHandler.php(83): Illuminate\Bus\Dispatcher->dispatchNow(Object(App\Jobs\SendEmailJob), false)
#12 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(128): Illuminate\Queue\CallQueuedHandler->Illuminate\Queue\{closure}(Object(App\Jobs\SendEmailJob))
#13 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(103): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}(Object(App\Jobs\SendEmailJob))
#14 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Queue\CallQueuedHandler.php(85): Illuminate\Pipeline\Pipeline->then(Object(Closure))
#15 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Queue\CallQueuedHandler.php(59): Illuminate\Queue\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\Queue\Jobs\DatabaseJob), Object(App\Jobs\SendEmailJob))
#16 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Queue\Jobs\Job.php(98): Illuminate\Queue\CallQueuedHandler->call(Object(Illuminate\Queue\Jobs\DatabaseJob), Array)
#17 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Queue\Worker.php(356): Illuminate\Queue\Jobs\Job->fire()
#18 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Queue\Worker.php(306): Illuminate\Queue\Worker->process('database', Object(Illuminate\Queue\Jobs\DatabaseJob), Object(Illuminate\Queue\WorkerOptions))
#19 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Queue\Worker.php(265): Illuminate\Queue\Worker->runJob(Object(Illuminate\Queue\Jobs\DatabaseJob), 'database', Object(Illuminate\Queue\WorkerOptions))
#20 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Queue\Console\WorkCommand.php(112): Illuminate\Queue\Worker->runNextJob('database', 'default', Object(Illuminate\Queue\WorkerOptions))
#21 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Queue\Console\WorkCommand.php(96): Illuminate\Queue\Console\WorkCommand->runWorker('database', 'default')
#22 [internal function]: Illuminate\Queue\Console\WorkCommand->handle()
#23 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Container\BoundMethod.php(33): call_user_func_array(Array, Array)
#24 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Container\Util.php(36): Illuminate\Container\BoundMethod::Illuminate\Container\{closure}()
#25 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Container\BoundMethod.php(91): Illuminate\Container\Util::unwrapIfClosure(Object(Closure))
#26 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Container\BoundMethod.php(35): Illuminate\Container\BoundMethod::callBoundMethod(Object(Illuminate\Foundation\Application), Array, Object(Closure))
#27 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Container\Container.php(592): Illuminate\Container\BoundMethod::call(Object(Illuminate\Foundation\Application), Array, Array, NULL)
#28 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Console\Command.php(134): Illuminate\Container\Container->call(Array)
#29 C:\xampp\htdocs\blog\vendor\symfony\console\Command\Command.php(255): Illuminate\Console\Command->execute(Object(Symfony\Component\Console\Input\ArgvInput), Object(Illuminate\Console\OutputStyle))
#30 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Console\Command.php(121): Symfony\Component\Console\Command\Command->run(Object(Symfony\Component\Console\Input\ArgvInput), Object(Illuminate\Console\OutputStyle))
#31 C:\xampp\htdocs\blog\vendor\symfony\console\Application.php(912): Illuminate\Console\Command->run(Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Component\Console\Output\ConsoleOutput))
#32 C:\xampp\htdocs\blog\vendor\symfony\console\Application.php(264): Symfony\Component\Console\Application->doRunCommand(Object(Illuminate\Queue\Console\WorkCommand), Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Component\Console\Output\ConsoleOutput))
#33 C:\xampp\htdocs\blog\vendor\symfony\console\Application.php(140): Symfony\Component\Console\Application->doRun(Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Component\Console\Output\ConsoleOutput))
#34 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Console\Application.php(93): Symfony\Component\Console\Application->run(Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Component\Console\Output\ConsoleOutput))
#35 C:\xampp\htdocs\blog\vendor\laravel\framework\src\Illuminate\Foundation\Console\Kernel.php(129): Illuminate\Console\Application->run(Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Component\Console\Output\ConsoleOutput))
#36 C:\xampp\htdocs\blog\artisan(37): Illuminate\Foundation\Console\Kernel->handle(Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Component\Console\Output\ConsoleOutput))
#37 {main}