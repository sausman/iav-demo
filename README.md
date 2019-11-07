# iav-demo

```bash
DWOLLA_SANDBOX_TOKEN="..."
DWOLLA_CUSTOMER_ID="..."

docker run -d -p 8444:80 \
  --name iav-demo \
  -e "DWOLLA_SANDBOX_TOKEN=$DWOLLA_SANDBOX_TOKEN" \
  -e "DWOLLA_CUSTOMER_ID=$DWOLLA_CUSTOMER_ID" \
  -v "$PWD":/var/www/html \
  php:7.2-apache
```
