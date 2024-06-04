/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ScoreOfStringTest {

    @Test
	public void testScoreOfString() throws Exception {
        //Test 1
        int want = 13;
        int got = ScoreOfString.scoreOfString( "hello" );
        assertEquals(want, got);
        //Test 2
        want = 50;
        got = ScoreOfString.scoreOfString( "zaz" );
        assertEquals(want, got);
	}

}
