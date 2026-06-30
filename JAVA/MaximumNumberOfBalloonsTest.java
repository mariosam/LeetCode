/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumNumberOfBalloonsTest {

    @Test
	public void testMaximumNumberOfBalloons() throws Exception {
        //Test 1
        int want = 1;
        int got = MaximumNumberOfBalloons.maxNumberOfBalloons("nlaebolko");
        assertEquals(want, got);
        //Test 2
        want = 2;
        got = MaximumNumberOfBalloons.maxNumberOfBalloons("loonbalxballpoon");
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = MaximumNumberOfBalloons.maxNumberOfBalloons("leetcode");
        assertEquals(want, got);
	}

}
