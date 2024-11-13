#include <stdio.h>
#include <stdlib.h>


int universal_set[] = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10}, SIZE=9;


// Function prototypes
void readset();
void printset(Set s);
void set_union(Set a, Set b);
void set_intersection(Set a, Set b);
void set_difference(Set a, Set b);

typedef struct {unsigned char x:1} bit;

void main()
{
    bit a[10]={0}, b[10]={0},c[10]={0};

    int n;

    printf("no.of elements in set A:")
    scanf("%d",&n)

    printset(set_union(setA, setB));
    printset(set_intersection(setA, setB));
    printset(set_difference(setA, setB));
    printf("Set A: ");
    printset(setA);
    printf("Set B: ");
    printset(setB);
}


// Function to print a set
void printset(Set s)
{
for(i=0;i<SIZE;i++)
if(s[k].Set==u[k])
print("%d",u[k]);
}

// Function to print a set
void readset(Set s)
{
for(i=0;i<SIZE;i++)
if(s[k].Set==u[k])
scaf("%d",&u[k]);
}

// Function to calculate the union of two sets
Set set_union(Set a, Set b)
{
    return a | b;
}

// Function to calculate the intersection of two sets
Set set_intersection(Set a, Set b)
{
    return a & b;
}

// Function to calculate the difference of two sets (A - B)
Set set_difference(Set a, Set b)
{
  return a & b;
}

