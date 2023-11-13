/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class Find132PatternTest {

    @Test
	public void testFind132Pattern() throws Exception {
        //Test 1
        boolean want = false;
        boolean got = Find132Pattern.find132pattern( new int[]{1,2,3,4} );
        assertEquals(want, got);
        //Test 2
        want = true;
        got = Find132Pattern.find132pattern( new int[]{3,1,4,2} );
        assertEquals(want, got);
        //Test 3
        want = true;
        got = Find132Pattern.find132pattern( new int[]{-1,3,2,0} );
        assertEquals(want, got);
	}

}
