/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.List;

public class BinaryTreePreorderTraversal {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", preorderTraversal(new TreeNode()));
    }

    public static List<Integer> preorderTraversal(TreeNode root) {
        List<Integer> list = new ArrayList<Integer>();

        helper( root, list );

        return list;
    }

    private static void helper(TreeNode node, List<Integer> list) {
        if ( node == null ) return;

        list.add( node.val );
        
        helper( node.left, list );
        helper( node.right, list );
    }
}
