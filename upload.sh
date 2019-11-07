#!/bin/sh

read_var() {
  if [ -z "$1" ]; then
    echo "environment variable name is required"
    return
  fi

  local ENV_FILE='.env'
  if [ ! -z "$2" ]; then
    ENV_FILE="$2"
  fi

  local VAR=$(grep $1 "$ENV_FILE" | xargs)
  IFS="=" read -ra VAR <<< "$VAR"
  echo ${VAR[1]}
}

keyFile=$(read_var KEY_FILE);
autoFolder=$(read_var AUTO_UPDATE_FOLDER);
product=$(read_var APP_PRODUCT);

updaterFilename="laraupdater.json";

version=$(<public/version.txt)

filename="$product-auto-$version";

autoUpdateFolder="$autoFolder/$filename/script";

logs=();
echo "Enter Change Log $version (Write END to end the multi-line)";

while read log
do

    if [ "$log" == "END" ]
        then
        break;
    fi
    logs+=("<li>"$log"</li>");


done

echo "$updaterFilename file";

echo "{
    \"version\": \"$version\",
    \"archive\": \"$filename.zip\",
    \"description\": \"<ul>${logs[@]}</ul>\"
}";

    echo "{
    \"version\": \"$version\",
    \"archive\": \"$filename.zip\",
    \"description\": \"<ul>${logs[@]}</ul>\"
}"  > $updaterFilename;


while true; do
    read -p "-> Do you want to zip the updates folders? (y/n)" yn
    case $yn in
        [Yy]* )

            echo "Deleting old $filename.zip file"
            rm -rf "$autoUpdateFolder/$filename".zip

            echo "-> Zipping..."

			zip -r "$autoUpdateFolder/$filename".zip  "$autoUpdateFolder" ;

			break;;
        [Nn]* ) break;;
        * ) echo "Please answer yes or no.";;
    esac
done


while true; do
    read -p "-> Upload $filename.zip and $updaterFilename to server? (y/n)" yn
    case $yn in
        [Yy]* )
			echo "-> Uploading $filename.zip to server..."
			scp -i "$keyFile" "$autoUpdateFolder/$filename".zip ubuntu@35.154.186.227:/home/ubuntu/htdocs/updates.froid.works/"$product"/;

			echo "-> Uploading $updaterFilename to server..."
			scp -i "$keyFile" "$updaterFilename" ubuntu@35.154.186.227:/home/ubuntu/htdocs/updates.froid.works/"$product"/;
			break;;
        [Nn]* ) break;;
        * ) echo "Please answer yes or no.";;
    esac
done