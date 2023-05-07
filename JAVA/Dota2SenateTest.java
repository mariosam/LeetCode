/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class Dota2SenateTest {

    @Test
	public void testDota2Senate() throws Exception {
        //Test 1
        String want = "Radiant";
        String got = Dota2Senate.predictPartyVictory( "RD" );
        assertEquals(want, got);
        //Test 2
        want = "Dire";
        got = Dota2Senate.predictPartyVictory( "RDD" );
        assertEquals(want, got);
	}

}
