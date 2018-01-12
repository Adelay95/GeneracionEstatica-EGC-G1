FROM ubuntu:14.04
LABEL maintainer="franciscojavierhigueras@gmail.com"
ENV DEBIAN_FRONTEND="noninteractive"
RUN apt-get update
RUN apt-get -y install software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt-get update
RUN apt-get -y install httrack 
RUN apt-get -y --force-yes install webhttrack
RUN apt-get -y install zip 
RUN apt-get -y install unzip
RUN apt-get -y --force-yes install php7.0 php7.0-zip

