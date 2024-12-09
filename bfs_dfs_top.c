#include <stdio.h>
#include <stdlib.h>
#define SIZE 10
typedef struct node{
int data;
int status;
struct node *point,*next;
}node;

typedef struct topsort{
int data;
struct topsort *next;
}topsort;

int d[SIZE],f[SIZE],time;
node *q[SIZE];
int fr=0,r=0;
node *g=NULL;
topsort *tsort=NULL;

void addV(int n)
{
node *t=(node*)malloc(sizeof(node));
t->data=n;
t->point=NULL;
t->next=g;
g=t;
}

node *find(int n)
{
node *t=g;
while(t!=NULL && t->data!=n)
      t=t->next;
return t;
}

void addE(int u, int v)
{
node *u1,*u2,*t;
u1=find(u);
u2=find(v);
t=(node*) malloc(sizeof(node));
t->next=u1->point;
u1->point=t;
t->point=u2;
}

void printG()
{
node *t1,*t2,*t3;
printf("\n V\tE List\n");
t1=g;
while(t1!=NULL)
{
 printf("\n%d...\t",t1->data);
 t2=t1->point;
 while(t2!=NULL)
 {
  printf("%d,",t2->point->data);
  t2=t2->next;
  }
 t1=t1->next;
 }
}

void topsorting(int n)
{
 topsort *z=(topsort*) malloc(sizeof(topsort));
 z->data=n;
 tsort=z;
}

void topsortP()
{
 while(tsort!=NULL)
  {
   printf("%d",tsort->data);
   tsort=tsort->next;
  }
}

void dfsT(node *u)
{
 node *t,*t1;
 u->status=1;
 printf("%d, ",u->data);
 ++time;
 d[u->data]=time;
 t=u->point;
 while(t!=NULL)
 {
  t1=t->point;
  if(t1->status==0)
   dfsT(t1);
  t=t->next;
 }
 ++time;
 f[u->data]=time;
 topsorting(u->data);
}

void dfs(node *g1)
{
node *t=g;
while(t!=NULL)
{
t->status=0;
t=t->next;
}
dfsT(g1);
}

void enq(node *s)
{
 int r1=r;
 r1=(r1+1)%SIZE;
 if(fr==r1)
 { 
   printf("Queue full");
   exit(0);
  }
 r=r1;
 q[r]=s;
}

int emptyq()
{
 if(fr == r)
  return 1;
 else
 return 0;
}

node *deq()
{
 if(emptyq())
 {
  printf("empty queue");
  exit(2);
 }
fr=(fr+1)%SIZE;
return q[fr];
}

void bfs(node *s)
{
 node *t=g,*t1,*u;
 while(t!=NULL)
 {
  t->status=0;
  t=t->next;
 }
s->status=1;
printf("%d, ",s->data);
enq(s);
 while(!emptyq())
 { 
  u=deq();
  t=u->point;
  while(t!=NULL)
  {
   t1=t->point;
   if(t1->status==0)
   {
    printf("%d, ",t1->data);
    enq(t1);
   }
   t=t->next;
  }
 }
}

void main()
{
  int choice, u, V,n;

    do {
        printf("\n--- Graph Operations Menu ---\n");
        printf("1. Add Vertex\n");
        printf("2. Add Edge\n");
        printf("3. Print Graph\n");
        printf("4. Depth First Search \n");
        printf("5. Breadth First Search\n");
        printf("6. Topological Sort \n");
        printf("7. Exit\n");
        printf("Enter your choice: ");
        scanf("%d", &choice);

        switch (choice) {
            case 1:
                printf("Enter the vertex to add: ");
                scanf("%d", &V);
                addV(V);
                break;

            case 2:
                printf("Enter the starting and ending vertices of the edge (u, v): ");
                scanf("%d %d", &u, &V);
                addE(u, V); 
                break;

            case 3:
                printG();
                break;

            case 4:
                printf("Enter the starting vertex for BFS: ");
                scanf("%d", &n);
                bfs(find(n));
                break;

            case 5:
                printf("Enter the starting vertex for DFS: ");
                scanf("%d", &n);
                dfs(find(n));
                break;              
            case 6:
                printf("TOPSORT : ");
                topsortP();
                break;   
            case 7:
                printf("Exiting...\n");
                break;

            default:
                printf("Invalid choice. Please try again.\n");
        }
    } while (choice != 7);

}
