#include <stdio.h>
#include <stdlib.h>

int uset[] = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10}, SIZE = 9;

// Function prototypes, now with correct types
void readset(bit s[], int n);
void printset(bit s[]);
void set_union(bit a[], bit b[], bit c[]);
void set_intersection(bit a[], bit b[], bit c[]);
void set_difference(bit a[], bit b[], bit c[]);


typedef struct {
    unsigned char x : 1;
} bit;

int main()  // Corrected return type to int
{
    bit a[10] = {0}, b[10] = {0}, c[10] = {0};
    int n;

    printf("no.of elements in set A:");
    scanf("%d", &n);
    readset(a, n);  // Pass n to readset
    printf("no.of elements in set B:");
    scanf("%d", &n);
    readset(b, n);  // Pass n to readset
    system("cls"); // Or "clear" depending on your system Corrected string for system()
    printf("Set A: ");
    printset(a);
    printf("Set B: ");
    printset(b);

    set_union(a, b, c);       // Use c to store the result
    printf("Set Union: ");
    printset(c);

    set_intersection(a, b, c); // Use c to store the result
    printf("Set Intersection: ");
    printset(c);

    set_difference(a, b, c);  // Use c to store the result
    printf("Set Difference (A-B): ");
    printset(c);

    return 0; // Added return 0 for good practice
}



void printset(bit s[])
{
    int k;
    printf("{");
    for (k = 0; k <= SIZE; k++) // Corrected loop condition, added =,  corrected k 
        if (s[k].x == 1) // Corrected comparison operator
            printf("%d", uset[k]);
    printf("}\n");
}

void readset(bit s[], int n) // Added n as a parameter
{
    int i, x, k;
    printf("enter %d elements: ",n);
    for (i = 0; i < n; i++) {
        scanf("%d", &x);
        for (k = 0; k <= SIZE; k++) { //Corrected the loop condition, added =
            if (uset[k] == x) {
                s[k].x = 1;
                break;
            }
        }
    }
}


void set_union(bit a[], bit b[], bit c[])
{
    int i;
    for(i=0; i<=SIZE; i++) {  // Corrected loop condition
        c[i].x = a[i].x | b[i].x;
    }
}

void set_intersection(bit a[], bit b[], bit c[])
{
    int i;
    for(i=0; i<=SIZE; i++) { // Corrected loop condition
        c[i].x = a[i].x & b[i].x;
    }

}


void set_difference(bit a[], bit b[], bit c[])
{
    int i;
    for(i=0; i<=SIZE; ++i) { // Corrected loop condition
    if (a[i].x == 1) 
        c[i].x = a[i].x ^ b[i].x; // Corrected to A-B logic.
    }
}