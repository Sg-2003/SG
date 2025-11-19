#include <stdio.h>
#include <stdlib.h>

struct Node {
    int data;
    struct Node* next;
};

void deleteNode(struct Node** head, int position) {
    struct Node* temp;
    struct Node* prev;
    temp = *head;
    prev = *head;

    for (int i = 0; i < position; i++) {
        if (i == 0 && position == 1) {
            *head = (*head)->next;
            free(temp);
        } else {
            if (i == position - 1 && temp) {
                prev->next = temp->next;
                free(temp);
            } else {
                prev = temp;
                if (prev == NULL)
                    break;
                temp = temp->next;
            }
        }
    }
}

// Example usage
int main() {
    struct Node* list = (struct Node*)malloc(sizeof(struct Node));
    list->next = NULL;
    // Add nodes to the list (e.g., Push(&list, 1); Push(&list, 2); Push(&list, 3);)
    // ...

    // Delete node at position 1 (0-based index)
    deleteNode(&list, 1);

    // Print the updated list
    // ...

    return 0;
}
