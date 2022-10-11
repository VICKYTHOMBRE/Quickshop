for file in *.html; do 
    mv -- "$file" "${file%.txt}.php"
done
