@servers(['web' => ['digital-ocean']])

@task('deploy', ['on' => 'web', 'confirm' => true])
    cd /var/www/html/benfica-live/benfica-live
    git pull origin master
@endtask
