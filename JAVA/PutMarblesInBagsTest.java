/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class PutMarblesInBagsTest {

    @Test
	public void testPutMarblesInBags() throws Exception {
        //Test 1
        long want = 4;
        long got = PutMarblesInBags.putMarbles( new int[]{1,3,5,1}, 2 );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = PutMarblesInBags.putMarbles( new int[]{1,3}, 2 );
        assertEquals(want, got);
	}

}
