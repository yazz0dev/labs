#include <stdio.h>
void main()
{
    int u, v, i, j, n, ne = 1;
    int visited[10] = {0}, min, mincost = 0, cost[10][10];
    printf("Enter the no.of nodes:");
    scanf("%d", &n);
    printf("\n Enter adjacency matrix: \n ");
    for (i = 1; i <= n; i++)
        for (j = 1; j <= n; j++)
        {
            scanf("%d", &cost[i][j]);
            if (cost[i][j] == 0)
                cost[i][j] = 999;
         }
            visited[1] = 1;
            printf("\n");
            while (ne < n)
            {
                min = 999;
                for (i = 1; i <= n; i++)
                    for (j = 1; j < n; j++)
                        if (cost[i][j] < min)
                        {
                            min = cost[i][j];
                            u = i;
                            v = j;
                        }
                printf("\n edge %d: (%d %d) cost: %d", ne++, u, v, min);
                mincost += min;
                visited[v] = 1;
                cost[u][v] = cost[v][u] = 999;
            }
            printf("\n Minimum cost=%d\n", mincost);
}
