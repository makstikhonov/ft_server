if  grep -q "autoindex" /etc/nginx/sites-available/mysite.conf; then
    cp -rf /usr/src/app/autoindex/mysite.conf /etc/nginx/sites-available/
    cp -rf /usr/src/app/autoindex/mysite.conf /etc/nginx/sites-enabled/
    echo "\nautoindex OFF" 
else
    cp -rf /usr/src/app/mysite.conf /etc/nginx/sites-available/
    cp -rf /usr/src/app/mysite.conf /etc/nginx/sites-enabled/
    echo "\nautoindex ON" 
fi
nginx -s reload