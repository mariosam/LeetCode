/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MonotonicArrayTest {

    @Test
	public void testMonotonicArray() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = MonotonicArray.isMonotonic( new int[]{1,2,2,3} );
        assertEquals(want, got);
        //Test 2
        want = true;
        got = MonotonicArray.isMonotonic( new int[]{6,5,4,4} );
        assertEquals(want, got);
        //Test 3
        want = false;
        got = MonotonicArray.isMonotonic( new int[]{1,3,2} );
        assertEquals(want, got);
	}

}
