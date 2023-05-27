/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LastStoneWeightTest {

    @Test
	public void testLastStoneWeight() throws Exception {
        //Test 1
        int want = 1;
        int got = LastStoneWeight.lastStoneWeight( new int[]{2,7,4,1,8,1} );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = LastStoneWeight.lastStoneWeight( new int[]{1} );
        assertEquals(want, got);
        //Test 3
        want = 2;
        got = LastStoneWeight.lastStoneWeight( new int[]{1,3} );
        assertEquals(want, got);
	}

}
