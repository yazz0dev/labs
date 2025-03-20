if [ $# -ne  3 ]
then
 echo "Syntax Error: $0 <no1> <no2> <no3> "
else

echo "the numbers are $1 $2 $3"

if [ $1 -gt $2 -a $1 -gt $3 ]
then
echo "$1 is greater number"
elif [ $2 -gt $3 ]
then
echo "$2 is greater number"
 else
  echo "$3 is greater number"
fi
fi




