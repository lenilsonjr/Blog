set :repo_url, "git@github.com:lenilsonjr/Blog.git"
set :use_sudo, false
set :keep_releases, 3

set :linked_files, %w{ anchor/config/app.php anchor/config/db.php anchor/config/session.php composer.json }

namespace :deploy do
  
  desc "Update composer dependencies"
  task :composer_install do
    on roles(:web) do

      within release_path do
        info "Running composer"
        execute 'composer', 'install', '--no-dev', '--optimize-autoloader'
      end

    end
  end

  after :updated, "deploy:composer_install"
end  