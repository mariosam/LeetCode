/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximizeHappinessOfSelectedChildrenTest {

    @Test
	public void testMaximizeHappinessOfSelectedChildren() throws Exception {
        //Test 1
        long want = 4;
        long got = MaximizeHappinessOfSelectedChildren.maximumHappinessSum( new int[]{1,2,3}, 2 );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = MaximizeHappinessOfSelectedChildren.maximumHappinessSum( new int[]{1,1,1,1}, 2 );
        assertEquals(want, got);
        //Test 3
        want = 5;
        got = MaximizeHappinessOfSelectedChildren.maximumHappinessSum( new int[]{2,3,4,5}, 1 );
        assertEquals(want, got);
	}

}
