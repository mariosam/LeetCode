/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CanMakeArithmeticProgressionFromSequenceTest {

    @Test
	public void testCanMakeArithmeticProgressionFromSequence() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = CanMakeArithmeticProgressionFromSequence.canMakeArithmeticProgression( new int[]{3,5,1} );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = CanMakeArithmeticProgressionFromSequence.canMakeArithmeticProgression( new int[]{1,2,4} );
        assertEquals(want, got);
	}

}
