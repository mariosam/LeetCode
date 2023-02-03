/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ContainsDuplicateTest {

    @Test
	public void testContainsDuplicate() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = ContainsDuplicate.containsDuplicate( new int[]{1,2,3,1} );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = ContainsDuplicate.containsDuplicate( new int[]{1,2,3,4} );
        assertEquals(want, got);
        //Test 3
        want = true;
        got = ContainsDuplicate.containsDuplicate( new int[]{1,1,1,3,3,4,3,2,4,2} );
        assertEquals(want, got);
	}

}
