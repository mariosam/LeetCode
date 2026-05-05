/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class RotateStringTest {

    @Test
	public void testRotateString() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = RotateString.rotateString( "abcde", "cdeab" );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = RotateString.rotateString( "abcde", "abced" );
        assertEquals(want, got);
	}

}
