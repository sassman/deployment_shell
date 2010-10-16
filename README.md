# CakePHP Deployment Shell #

http://blog.lubico.biz/2010/07/cakephp-deployment/

# Installation #

Install the plugin as normal, by dropping the deployment_shell directory into your /app/plugins directory.

	$ git submodule add git://github.com/sassman/deployment_shell.git app/plugins/deployment_shell

# Included Features: (also see CHANGELOG) #

- provide a progressbar as default to better show what is going on during deployment
- Deployment sources
	- Local Filesystem (APP_DIR/..)
	- local git (EXPERIMENAL)
- Deployment destinations
	- FTP
	- ARCHIVE (ZIP File)


# Planned Features: #

- provide a ssh/sftp as new deployment destination
- adding github support for the deploy shell
 