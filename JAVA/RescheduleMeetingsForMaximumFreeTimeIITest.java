/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class RescheduleMeetingsForMaximumFreeTimeIITest {

    @Test
	public void testRescheduleMeetingsForMaximumFreeTimeII() throws Exception {
        //Test 1
        int want = 2;
        int got = RescheduleMeetingsForMaximumFreeTimeII.maxFreeTime( 5, new int[]{1,3}, new int[]{2,5} );
        assertEquals(want, got);
        //Test 2
        want = 7;
        got = RescheduleMeetingsForMaximumFreeTimeII.maxFreeTime( 10, new int[]{0,7,9}, new int[]{1,8,10} );
        assertEquals(want, got);
        //Test 3
        want = 6;
        got = RescheduleMeetingsForMaximumFreeTimeII.maxFreeTime( 10, new int[]{0,3,7,9}, new int[]{1,4,8,10} );
        assertEquals(want, got);
        //Test 4
        want = 0;
        got = RescheduleMeetingsForMaximumFreeTimeII.maxFreeTime( 5, new int[]{0,1,2,3,4}, new int[]{1,2,3,4,5} );
        assertEquals(want, got);
	}

}
