Docker: the Linux container engine - Blog Post
==============================================

go to https://www.docker.com/ for more information on Docker and how
to install it.

I run in docker non root access mode:
https://docs.docker.com/installation/ubuntulinux/#giving-non-root-access
So the commands following will not use sudo. If you choose to use root
then prefix every docker command with sudo.

## The purpose of this repo

The purpose of this repo is just to showcase 2 very simple docker Dockerfiles
which you can use to start local development with a debian environment running
php5 and a postgresql database.


## What it is not
a showcase on how to code PHP. This code presented here is RUBBISH, utter rubbish.
I made it this way so your focus would be on Docker and not in understanding the code
or clicking through Classes or includes to make you understand.

## How to

check out this repo and go inside the apache directory
from there do a

```vim
cd apache
docker build -t nickbelhomme/apache .
```

this will give you an image tagged nickbelhomme/apache. You can ofcourse name
it any way you want, but try to keep the format [yourname]/[imagename]
This will come in handy if you ever want to push it to the docker registry: http://registry.hub.docker.com/
The latter is of course optional.

Do the same for the postgresql image. Go inside the dir postgres

```vim
cd postgres
docker build -t nickbelhomme/postgres .

```

Congrats now you have 2 images installed.

you can see these images with the following command

```vim
docker images
```

it will list something as

```vim
nickbelhomme/postgres          latest              3d09510dab44        2 hours ago        271.3 MB
nickbelhomme/apache   latest              f6eb10d32f1c        2 hours ago        223.6 MB
debian                         wheezy              29853cd4f422        42 hours ago        85.19 MB
```

The debian image is the official image as FROM where our custom image is build of.

You can see this in the Dockerfile itself indicated by the FROM command in the top of the file


now head of to the complete blogpost on how to use these images:
http://blog.nickbelhomme.com/php/moving-from-vagrant-to-docker-in-an-easy-way_447