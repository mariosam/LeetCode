/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class SameTree {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", isSameTree(new TreeNode(), new TreeNode()));
    }

    public static boolean isSameTree(TreeNode p, TreeNode q) {
        if ( p == null && q == null ) return true;
        if ( p == null || q == null ) return false;

        return (p.val == q.val) && isSameTree(p.left, q.left) && isSameTree(p.right, q.right);
    }
}
