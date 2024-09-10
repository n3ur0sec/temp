#!/bin/bash

# Define the directory to start the search
dir="/kunden/homepages"

# File to store the output
output_file="directory_list.txt"

# Search for directories
subdirs=$(find $dir -mindepth 1 -type d ! -path "*www*" ! -path "*members*" ! -path "*old*" ! -path "*harleystreetnurses.com*" ! -path "*old_members*" ! -path "*learningaboutdogs.com*" ! -path "*heads2gether.net*")

# Loop through the subdirectories
for subdir in $subdirs; do
    # Print the current subdirectory to the output file
    echo $subdir >> $output_file
done
