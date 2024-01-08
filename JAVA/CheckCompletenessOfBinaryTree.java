/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.LinkedList;
import java.util.Queue;

public class CheckCompletenessOfBinaryTree {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", isCompleteTree( new TreeNode(0) ));
    }

    public static boolean isCompleteTree(TreeNode root) {
      Queue<TreeNode> queue = new LinkedList<>();
      queue.add(root);
      
      boolean edgeCaseSecondlevel = false;
      boolean levelIndicator = false;
      while (!queue.isEmpty()) {
        int size = queue.size();
      
        for (int i = 0; i < size; i++) {
          TreeNode current = ((LinkedList<TreeNode>) queue).pop();
          if (current == null && queue.peek() != null) {
            return false;
          }
          if (levelIndicator && current != null) {
            if (current.right != null
                || current.left != null) {
              return false;
            }
          }
          if (current != null && current.left == null && current.right == null) {
            edgeCaseSecondlevel = true;
          }
      
          if (current != null) {
            ((LinkedList<TreeNode>) queue).add(current.left);
            ((LinkedList<TreeNode>) queue).add(current.right);
          }
        }
        levelIndicator = false;
        if (edgeCaseSecondlevel) {
          levelIndicator = true;
        }
      
      }
      
      return true;
    }

}
