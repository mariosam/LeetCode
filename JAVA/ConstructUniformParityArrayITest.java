/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ConstructUniformParityArrayITest {

    @Test
	public void testConstructUniformParityArrayI() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = ConstructUniformParityArrayI.uniformArray( new int[]{2,3} );
        assertEquals(want, got);
        //Test 2
        want = true;
        got = ConstructUniformParityArrayI.uniformArray( new int[]{4,5} );
        assertEquals(want, got);
        //Test 3
        want = true;
        got = ConstructUniformParityArrayI.uniformArray( new int[]{1,1,1,3,3,4,3,2,4,2} );
        assertEquals(want, got);
	}

}
