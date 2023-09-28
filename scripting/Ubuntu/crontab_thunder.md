Crontab (auto execute tasks or commands) (Ejecutar DNS update en duckdns)
Put this line into crontab
echo url="https://www.duckdns.org/update?domains=DOMAIN_NAME_HERE&token=DUCKDNS_TOKEN_HERE&&ip=" | curl -k -o ~/duckdns/duck.log -K -