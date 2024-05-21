# Creamos la imagen a partir de ubuntu versión 18.04
FROM ubuntu:18.04

# Damos información sobre la imagen que estamos creando
LABEL \
	version="1.0" \
	description="Parcial - PRACTICO 2" \
	creationDate="29-01-2024" \
	maintainer="Nombre <usuarioBIRT@birt.eus>"

# Instalamos las aplicaciones necesarias y creamos usuarios
RUN \
	apt-get update \
	&& apt-get install nano \
	&& apt-get install apache2 --yes \
	&& apt-get install proftpd --yes \
	&& mkdir /var/www/html/sitio1 /var/www/html/sitio2 \
	&& (...)

# Copiamos el index al directorio por defecto del servidor Web
COPY html/sitio1/indexPrimero.html /var/www/html/sitio1/index.html
COPY html/sitio2/indexSegundo.html /var/www/html/sitio2/index.html
COPY html/sitio1/sitioPrimero.conf html/sitio2/sitioSegundo.conf /etc/apache2/sites-available/
COPY html/sitio1/sitioPrimero.key /etc/ssl/private
COPY html/sitio1/sitioPrimero.cer /etc/ssl/certs
COPY conf/proftpd.conf /etc/proftpd/proftpd.conf
COPY conf/tls.conf /etc/proftpd/tls.conf
COPY conf/certs/parcial.crt /etc/ssl/certs/parcial.crt
COPY conf/certs/parcial.key /etc/ssl/private/parcial.key

# Activamos sitios web y ssl
RUN (...)

# Exponemos puertos
(...)