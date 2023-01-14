/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import java.util.ArrayList;
import java.util.List;
import org.junit.Test;

public class BinaryTreePreorderTraversalTest {

    @Test
	public void testBinaryTreePreorderTraversal() throws Exception {
            //Test 1
            List<Integer> want = new ArrayList<Integer>();
            want.add(1);
            want.add(2);
            want.add(3);
            TreeNode tn1 = new TreeNode(1);
            TreeNode tn2 = new TreeNode(2);
            TreeNode tn3 = new TreeNode(3);
            tn1.left = null;
            tn1.right = tn2;
            tn2.left = tn3;
            List<Integer> got = BinaryTreePreorderTraversal.preorderTraversal( tn1 );
            assertArrayEquals(want.toArray(), got.toArray());
            //Test 2
            want = new ArrayList<Integer>();
            got = BinaryTreePreorderTraversal.preorderTraversal( null );
            assertArrayEquals(want.toArray(), got.toArray());
            //Test 3
            want = new ArrayList<Integer>();
            want.add(1);
            got = BinaryTreePreorderTraversal.preorderTraversal(new TreeNode(1) );
            assertArrayEquals(want.toArray(), got.toArray());
	}

}
