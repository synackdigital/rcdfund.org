set :application, 'rcdfund.org'

set :repo_url, 'git@github.com:synackdigital/rcdfund.org.git'
set :branch, :master

set :deploy_to, -> { "/var/www/#{fetch(:application)}" }

set :log_level, :debug

set :linked_files, %w{.env web/.htaccess}
set :linked_dirs, %w{web/app/uploads web/app/upgrade}

set :npm_target_path, -> { release_path.join('web/app/themes/rcdfund') }
set :npm_flags, '--silent'

set :grunt_file, -> { release_path.join('web/app/themes/rcdfund/Gruntfile.js') }
set :grunt_tasks, 'build'
before 'deploy:updated', 'grunt'
