# Use the official httpd base image
FROM httpd:2.4


# Copy the custom index.html into the default Apache document root
COPY index.html /usr/local/apache2/htdocs/
COPY folder /usr/local/apache2/htdocs/


