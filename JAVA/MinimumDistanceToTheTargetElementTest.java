/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumDistanceToTheTargetElementTest {

    @Test
	public void testMinimumDistanceToTheTargetElement() throws Exception {
        //Test 1
        int want = 1;
        int got = MinimumDistanceToTheTargetElement.getMinDistance( new int[]{1,2,3,4,5}, 5, 3 );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = MinimumDistanceToTheTargetElement.getMinDistance( new int[]{1}, 1, 0 );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = MinimumDistanceToTheTargetElement.getMinDistance( new int[]{1,1,1,1,1,1,1,1,1,1}, 1, 0 );
        assertEquals(want, got);
	}

}
