#!/bin/bash

docker build -t dr.chefkoch.net/php-crud-api .
docker push dr.chefkoch.net/php-crud-api

kubectl --context=prod.langren delete rc attribution-database-api
kubectl --context=prod.langren create -f kubernetes/prod/attribution/app-rc.yml