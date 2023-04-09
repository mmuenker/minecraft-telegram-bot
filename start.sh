#!/bin/bash

docker run -it --restart unless-stopped --env-file .env --name minecraft-server-bot -d minecraft-server-bot
