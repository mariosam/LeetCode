/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class UniqueNumberOfOccurrencesTest {

    @Test
	public void testUniqueNumberOfOccurrences() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = UniqueNumberOfOccurrences.uniqueOccurrences( new int[]{1,2,2,1,1,3} );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = UniqueNumberOfOccurrences.uniqueOccurrences( new int[]{1,2} );
        assertEquals(want, got);
        //Test 3
        want = true;
        got = UniqueNumberOfOccurrences.uniqueOccurrences( new int[]{-3,0,1,-3,1,1,1,-3,10,0} );
        assertEquals(want, got);
	}

}
