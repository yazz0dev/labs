#include <stdio.h>
#include <stdlib.h>
#define SIZE 10

typedef struct node {
    int data;
    int status;
    struct node *point, *next;
} node;

int d[SIZE], f[SIZE], time;
node *q[SIZE];
int fr = 0, r = 0;
node *g = NULL;

void addV(int n) {
    node *t = (node *)malloc(sizeof(node));
    t->data = n;
    t->point = NULL;
    t->next = g;
    g = t;
}

node *find(int n) {
    node *t = g;
    while (t != NULL && t->data != n)
        t = t->next;
    return t;
}

void addE(int u, int v) {
    node *u1, *u2, *t;
    u1 = find(u);
    u2 = find(v);
    if (u1 == NULL || u2 == NULL) {
        printf("Vertex not found!\n");
        return;
    }
    t = (node *)malloc(sizeof(node));
    t->next = u1->point;
    u1->point = t;
    t->point = u2;
}

void printG() {
    node *t1, *t2, *t3;
    printf("\nVertices \tEdge List\n");
    t1 = g;
    while (t1 != NULL) {
        printf("\n%d --> ", t1->data);
        t2 = t1->point;
        while (t2 != NULL) {
            printf("%d, ", t2->point->data);
            t2 = t2->next;
        }
        t1 = t1->next;
    }
    printf("\n");
}

void enq(node *s) {
    int r1 = r;
    r1 = (r1 + 1) % SIZE;
    if (fr == r1) {
        printf("Queue full\n");
        exit(0);
    }
    r = r1;
    q[r] = s;
}

int emptyq() {
    return fr == r;
}

node *deq() {
    if (emptyq()) {
        printf("Empty queue\n");
        exit(2);
    }
    fr = (fr + 1) % SIZE;
    return q[fr];
}

void bfs(node *s) {
    node *t = g, *t1, *u;
    while (t != NULL) {
        t->status = 0; // Mark all nodes as unvisited
        t = t->next;
    }
    s->status = 1; // Mark the starting node as visited
    printf("BFS Traversal: %d, ", s->data);
    enq(s);

    while (!emptyq()) {
        u = deq();
        t = u->point;
        while (t != NULL) {
            t1 = t->point;
            if (t1->status == 0) {
                t1->status = 1; // Visit the node
                printf("%d, ", t1->data);
                enq(t1);
            }
            t = t->next;
        }
    }
    printf("\n");
}

void main() {
    // Adding vertices
    addV(1);
    addV(2);
    addV(3);
    addV(4);
    addV(5);

    // Adding edges
    addE(1, 2);
    addE(1, 3);
    addE(2, 4);
    addE(3, 5);
    addE(4, 5);

    // Printing the graph
    printG();

    // Performing BFS starting from vertex 1
    bfs(find(1));
    


}
