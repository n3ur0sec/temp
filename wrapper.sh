#!/bin/bash

trap "" SIGTERM SIGINT
while :
do
    ./nq-miner -t cuda -a "NQ34 M4DF 50PP N1VN PX15 EUFJ G8SV SUV1 3E1C" --pool pool.acemining.co:8443
    sleep 1
done
