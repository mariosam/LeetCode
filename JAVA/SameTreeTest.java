/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class SameTreeTest {

    @Test
	public void testSameTree() throws Exception {
            //Test 1
            boolean want = true;
            TreeNode tn1 = new TreeNode(1);
            TreeNode tn2 = new TreeNode(2);
            TreeNode tn3 = new TreeNode(3);
            tn1.left = null;
            tn1.right = tn2;
            tn2.left = tn3;
            boolean got = SameTree.isSameTree( tn1, tn1 );
            assertEquals(want, got);
            //Test 2
            want = false;
            got = SameTree.isSameTree( null, new TreeNode(1) );
            assertEquals(want, got);
            //Test 3
            want = false;
            got = SameTree.isSameTree(new TreeNode(1, null, tn2), new TreeNode(2, null, tn3) );
            assertEquals(want, got);
	}

}
