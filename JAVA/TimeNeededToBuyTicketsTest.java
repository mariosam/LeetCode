/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class TimeNeededToBuyTicketsTest {

    @Test
	public void testTimeNeededToBuyTickets() throws Exception {
        //Test 1
        int want = 6;
        int got = TimeNeededToBuyTickets.timeRequiredToBuy( new int[]{2,3,2}, 2 );
        assertEquals(want, got);
        //Test 2
        want = 8;
        got = TimeNeededToBuyTickets.timeRequiredToBuy( new int[]{5,1,1,1}, 0 );
        assertEquals(want, got);
	}

}
