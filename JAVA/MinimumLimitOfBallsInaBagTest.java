/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumLimitOfBallsInaBagTest {

    @Test
	public void testMinimumLimitOfBallsInaBag() throws Exception {
        //Test 1
        int want = 3;
        int got =  MinimumLimitOfBallsInaBag.minimumSize( new int[]{9}, 2 );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got =  MinimumLimitOfBallsInaBag.minimumSize( new int[]{2,4,8,2}, 4 );
        assertEquals(want, got);
	}

}
