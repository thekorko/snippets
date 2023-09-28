RewriteRule ^(?:old-example)/(.+\.html)$ /$1 [R=301,L]

RewriteRule ^en/categories/old-example(/.*|)$ en/categories/new-example/$1 [R=301,L,NC]