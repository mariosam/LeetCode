/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumDeletionsToMakeStringBalancedTest {

    @Test
	public void MinimumDeletionsToMakeStringBalanced() throws Exception {
        //Test 1
        long want = 2;
        long got =  MinimumDeletionsToMakeStringBalanced.minimumDeletions("aababbab");
        assertEquals(want, got);
        //Test 2
        want = 2;
        got =  MinimumDeletionsToMakeStringBalanced.minimumDeletions("bbaaaaabb");
        assertEquals(want, got);
	}

}
