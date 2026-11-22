/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumScoreByChangingTwoElementsTest {

    @Test
	public void testMinimumScoreByChangingTwoElements() throws Exception {
        //Test 1
        int want = 3;
        int got = MinimumScoreByChangingTwoElements.minimizeSum( new int[]{1,4,7,8,5} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = MinimumScoreByChangingTwoElements.minimizeSum( new int[]{1,4,3} );
        assertEquals(want, got);
	}

}
