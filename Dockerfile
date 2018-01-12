FROM ubuntu:14.04
LABEL maintainer="franciscojavierhigueras@gmail.com"
RUN apt-get update
RUN apt-get install httrack 
RUN apt-get install webhttrack 
RUN apt-get install zip unzip php7.0-zip
RUN cd var/www/html/splc/wp-content/plugins 
RUN chmod 
RUN mkdir generacion-estatica 
RUN cd generacion-estatica
ADD https://api.github.com/repos/Proyecto-EGC-G1/GeneracionEstatica-EGC-G1/compare/master...HEAD /dev/null
RUN git clone https://github.com/Proyecto-EGC-G1/GeneracionEstatica-EGC-G1

