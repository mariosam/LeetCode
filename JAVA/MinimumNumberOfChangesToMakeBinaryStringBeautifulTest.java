/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumNumberOfChangesToMakeBinaryStringBeautifulTest {

    @Test
	public void testMinimumNumberOfChangesToMakeBinaryStringBeautiful() throws Exception {
        //Test 1
        int want = 2;
        int got =  MinimumNumberOfChangesToMakeBinaryStringBeautiful.minChanges( "1001" );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got =  MinimumNumberOfChangesToMakeBinaryStringBeautiful.minChanges( "10" );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got =  MinimumNumberOfChangesToMakeBinaryStringBeautiful.minChanges( "0000" );
        assertEquals(want, got);
	}

}
